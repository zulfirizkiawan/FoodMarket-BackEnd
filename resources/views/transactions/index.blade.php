<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transactions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white mt-8">
            <table class="table-auto w-full">
                <thead>
                <tr>
                    <th class="border px-6 py-4">ID</th>
                    <th class="border px-6 py-4">Food</th>
                    <th class="border px-6 py-4">User</th>
                    <th class="border px-6 py-4">Quantity</th>
                    <th class="border px-6 py-4">Total</th>
                    <th class="border px-6 py-4">Status</th>
                    <th class="border px-6 py-4">Action</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($transactions as $item)
                        <tr>
                            <td class="border px-6 py-4 text-center">{{ $item->id }}</td>
                            <td class="border px-6 py-4 ">{{ $item->food->name }}</td>
                            <td class="border px-6 py-4 ">{{ $item->user->name }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->quantity }}</td>
                            <td class="border px-6 py-4">{{ number_format($item->total) }}</td>
                            <td class="border px-6 py-4 text-center">{{ $item->status }}</td>
                            <td class="border px-6 py-3" style=" display:flex; align-items:center; justify-content: space-evenly;">
                                    <a href="{{ route('transactions.show', $item->id) }}" class="text-white font-bold py-2 px-4 rounded" style="background-color: #2666CF;">
                                        View
                                    </a>
                                    <form action="{{ route('transactions.destroy', $item->id) }}" method="POST" class="inline-block">
                                        {!! method_field('delete') . csrf_field() !!}
                                        <button type="submit" class="text-white font-bold py-2 px-4 rounded inline-block" style="background-color: #DD4A48;">
                                            Delete
                                        </button>
                                    </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                           <td colspan="7" class="border text-center p-5">
                               Data Tidak Ditemukan
                           </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="text-center mt-5">
            {{ $transactions->links() }}
        </div>
        </div>
    </div>
</x-app-layout>
