<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transaction &raquo; {{ $item->food->name }} by {{ $item->user->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full rounded overflow-hidden shadow-lg px-6 py-6 bg-white">
                <div class="-mx-4 -mb-4 md:mb-0" style=" display:flex; align-items:center; justify-content: space-evenly;">
                    <div class="md:w-1/6 ">
                        <img src="{{ $item->food->picturePath }}" alt="" class="w-100 rounded">
                    </div>
                    <div class="w-full md:w-5/6 px-4 mb-4 md:mb-0">
                        <div class="flex-wrap mb-3" style="display:flex; margin-bottom: 5%">
                            <div class="w-2/6" style="margin-right: 15%;">
                                <div class="text-sm">Product Name</div>
                                <div class="text-xl font-bold">{{ $item->food->name }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 15%;">
                                <div class="text-sm">Quantity</div>
                                <div class="text-xl font-bold">{{ number_format($item->quantity) }}</div>
                            </div>
                            <div class="w-2/6" style="margin-right: 15%;">
                                <div class="text-sm">Total</div>
                                <div class="text-xl font-bold">{{ number_format($item->total) }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 15%;">
                                <div class="text-sm">Status</div>
                                <div class="text-xl font-bold">{{ $item->status }}</div>
                            </div>
                        </div>
                        <div class="w-full flex-wrap mb-3" style="display:flex; margin-bottom: 2%;">
                            <div class="w-2/6" style="margin-right: 17%;">
                                <div class="text-sm">User Name</div>
                                <div class="text-xl font-bold">{{ $item->user->name }}</div>
                            </div>
                           
                            <div class="w-2/6" style="margin-right: 11%;">
                                <div class="text-sm">City</div>
                                <div class="text-xl font-bold">{{ $item->user->city }}</div>
                            </div>
                            <div class="w-1/6" style="margin-right: 16%;">
                                <div class="text-sm">Address</div>
                                <div class="text-xl font-bold">{{ $item->user->address }}</div>
                            </div>
                            <div class="w-1/6" >
                                <div class="text-sm">Email</div>
                                <div class="text-xl font-bold">{{ $item->user->email }}</div>
                            </div>
                        </div>
                        <div class="flex-wrap mb-1" style="display:flex; justify-content: flex-start; margin-bottom: 2%;">
                           
                            <div class="w-1/6" style="margin-right: 13%;">
                                <div class="text-sm">Number</div>
                                <div class="text-xl font-bold">{{ $item->user->houseNumber }}</div>
                            </div>
                            <div class="w-1/6">
                                <div class="text-sm">Phone</div>
                                <div class="text-xl font-bold">{{ $item->user->phoneNumber }}</div>
                            </div>
                        </div>
                        <div class="mb-1" style="display:flex; margin-bottom: 2%;">
                            <div class="w-5/6">
                                <div class="text-sm">Payment URL</div>
                                <div class="text-lg">
                                    <a href="{{ $item->payment_url }}">{{ $item->payment_url }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex-wrap mb-1" style="display:flex; justify-content: flex-start;">
                           
                            <div class="w-1/6" style="margin-right: 5%;">
                                <a href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'ON_DELIVERY']) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                     On Delivery
                                 </a>
                            </div>
                            <div class="w-1/6" style="margin-right: 5%;">
                                <a href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'DELIVERED']) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                     Delivered
                                 </a>
                            </div>
                            <div class="w-1/6">
                                <a href="{{ route('transactions.changeStatus', ['id' => $item->id, 'status' => 'CANCELLED']) }}"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold px-2 rounded block text-center w-full mb-1">
                                     Cancelled
                                 </a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
