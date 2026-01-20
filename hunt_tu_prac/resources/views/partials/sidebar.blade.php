<aside class="w-64 bg-slate-900 text-white hidden md:flex flex-col">
    <div class="p-6 text-2xl font-bold border-b border-slate-700">AdminPanel</div>
    <nav class="flex-1 p-4 space-y-2">
        <a href="#" class="block py-2.5 px-4 rounded bg-blue-600">Dashboard</a>
        <a href="{{ route('users.index') }}" class="block py-2.5 px-4 rounded hover:bg-slate-800 transition">Users</a>
        <a href="{{ route('bills.index') }}" class="block py-2.5 px-4 rounded hover:bg-slate-800 transition">Bills</a>
        <a href="#" class="block py-2.5 px-4 rounded hover:bg-slate-800 transition">Settings</a>
    </nav>
</aside>
