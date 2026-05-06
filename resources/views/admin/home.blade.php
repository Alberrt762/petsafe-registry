@extends('layouts.admin')

@section('content')
<div class="dashboard">
    <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>
    <p class="text-slate-600">Manage records, adoptions, and incident reports here.</p>

    <div class="grid md:grid-cols-3 gap-6 mt-6">
        <div class="card p-4 rounded-xl shadow-sm bg-white">
            <h2 class="text-lg font-semibold">Records</h2>
            <p class="text-sm text-slate-500">View all registered dogs and owners.</p>
        </div>
        <div class="card p-4 rounded-xl shadow-sm bg-white">
            <h2 class="text-lg font-semibold">Adoption Management</h2>
            <p class="text-sm text-slate-500">Approve or flag adoption requests.</p>
        </div>
        <div class="card p-4 rounded-xl shadow-sm bg-white">
            <h2 class="text-lg font-semibold">Reports & Analytics</h2>
            <p class="text-sm text-slate-500">Monitor incident reports and notifications.</p>
        </div>
    </div>
</div>
@endsection
