<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index()
    {
        // Retrieve all discount settings
        $discounts = Discount::all();

        return view('discounts.index', compact('discounts'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|unique:discounts,type',
            'percentage' => 'nullable|numeric|min:0|max:100',
            'is_enabled' => 'boolean'
        ]);

        Discount::create([
            'type' => $validatedData['type'],
            'percentage' => $validatedData['percentage'] ?? 0,
            'is_enabled' => $validatedData['is_enabled'] ?? false
        ]);

        return redirect()->route('discounts.index')
            ->with('success', 'Discount created successfully.');
    }

    public function update(Request $request, Discount $discount)
    {
        $validatedData = $request->validate([
            'percentage' => 'nullable|numeric|min:0|max:100',
            'is_enabled' => 'boolean'
        ]);

        $discount->update([
            'percentage' => $validatedData['percentage'] ?? $discount->percentage,
            'is_enabled' => $validatedData['is_enabled'] ?? $discount->is_enabled
        ]);

        return redirect()->route('discounts.index')
            ->with('success', 'Discount updated successfully.');
    }

    public function destroy(Discount $discount)
    {
        $discount->delete();

        return redirect()->route('discounts.index')
            ->with('success', 'Discount removed successfully.');
    }
}