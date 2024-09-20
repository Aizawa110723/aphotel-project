<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">予約画面</h2>
    </x-slot>
    <div>
        <form method="POST" action="{{ route('guest.store') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="name" class="font-semibold mt-4">名前</label>
                    <input type="text" name="name" class="w-auto py-2 border bprder-gray300 rounded-md" id="name">
                </div>
                <div class="w-full flex flex-col">
                    <label for="address" class="font-semibold mt-4">住所</label>
                    <input type="text" name="address" class="" id="address">
                </div>
                <div class="w-full flex flex-col">
                    <label for="tell" class="font-semibold mt-4">電話番号</label>
                    <input type="text" name="tel" class="font-semibold mt-4" id="tel">
                </div>
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">その他ご要望・備考</label>
                <textarea name="body" class="w-auto py-2 border bprder-gray300 rounded-md" id="body" cols="30" rows="10"></textarea>
            </div>

            <x-primary-button class="mt-4">
                予約
            </x-primary-button>

        </form>
    </div>
</x-app-layout>
