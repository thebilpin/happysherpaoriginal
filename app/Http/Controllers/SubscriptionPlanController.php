<?php

namespace App\Http\Controllers;

use App\SubscriptionPlan;
use App\Item;
use App\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubscriptionPlanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Admin']);
    }

    public function index()
    {
        $plans = SubscriptionPlan::withCount('activeSubscriptions')
            ->ordered()
            ->paginate(20);
        
        return view('admin.subscriptions.plans.index', compact('plans'));
    }

    public function create()
    {
        $categories = ItemCategory::with('items')->get();
        $items = Item::where('is_active', 1)->get();
        
        return view('admin.subscriptions.plans.create', compact('categories', 'items'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'frequency' => 'required|in:weekly,biweekly,monthly',
            'frequency_interval' => 'required|integer|min:1',
            'box_size' => 'nullable|integer|in:1,2,3',
            'customizable' => 'boolean',
            'max_items' => 'nullable|integer|min:1',
            'active' => 'boolean',
            'sort_order' => 'nullable|integer',
            'default_items' => 'nullable|array',
            'default_items.*.item_id' => 'required|exists:items,id',
            'default_items.*.quantity' => 'required|integer|min:1',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        
        $plan = SubscriptionPlan::create($validated);

        return redirect()->route('admin.subscription-plans.index')
            ->with('success', 'Subscription plan created successfully!');
    }

    public function edit(SubscriptionPlan $subscriptionPlan)
    {
        $categories = ItemCategory::with('items')->get();
        $items = Item::where('is_active', 1)->get();
        
        return view('admin.subscriptions.plans.edit', compact('subscriptionPlan', 'categories', 'items'));
    }

    public function update(Request $request, SubscriptionPlan $subscriptionPlan)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'frequency' => 'required|in:weekly,biweekly,monthly',
            'frequency_interval' => 'required|integer|min:1',
            'box_size' => 'nullable|integer|in:1,2,3',
            'customizable' => 'boolean',
            'max_items' => 'nullable|integer|min:1',
            'active' => 'boolean',
            'sort_order' => 'nullable|integer',
            'default_items' => 'nullable|array',
        ]);

        $validated['slug'] = Str::slug($validated['name']);
        
        $subscriptionPlan->update($validated);

        return redirect()->route('admin.subscription-plans.index')
            ->with('success', 'Subscription plan updated successfully!');
    }

    public function destroy(SubscriptionPlan $subscriptionPlan)
    {
        if ($subscriptionPlan->activeSubscriptions()->count() > 0) {
            return back()->with('error', 'Cannot delete plan with active subscriptions!');
        }

        $subscriptionPlan->delete();

        return redirect()->route('admin.subscription-plans.index')
            ->with('success', 'Subscription plan deleted successfully!');
    }

    public function toggle(SubscriptionPlan $subscriptionPlan)
    {
        $subscriptionPlan->update(['active' => !$subscriptionPlan->active]);

        $status = $subscriptionPlan->active ? 'activated' : 'deactivated';
        return back()->with('success', "Subscription plan {$status} successfully!");
    }
}
