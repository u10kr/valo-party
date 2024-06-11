<form wire:submit="login" class="mt-7 rounded-xl border border-gray-200 bg-white shadow-sm">
    <div class="p-4 sm:p-7">
        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800">ログイン</h1>
        </div>

        <div class="mt-5">
            <form>
                <div class="grid gap-y-4">
                    <x-input.text label="メールアドレス" model="email"></x-input.text>

                    <x-input.password label="パスワード" model="password"></x-input.password>

                    <x-button.submit label="ログイン"></x-button.submit>
                </div>
            </form>
        </div>
    </div>
</form>
