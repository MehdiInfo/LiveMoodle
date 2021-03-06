<x-jet-action-section>
    <x-slot name="title">
        {{ __('Facteur à double authentification') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ajoutez une sécurité supplémentaire à votre compte en utilisant l\'authentification à deux facteurs.
') }}
    </x-slot>

    <x-slot name="content">
            @if ($this->enabled)
            <h3 class="text-lg font-medium text-green-300">
                {{ __('Vous avez activé l\'authentification à deux facteurs.') }}
            @else
            <h3 class="text-lg font-medium text-red-600">

                {{ __('Vous n\'avez pas activé l\'authentification à deux facteurs.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('Lorsque l\'authentification à deux facteurs est activée, vous serez invité à saisir un jeton aléatoire et sécurisé lors de l\'authentification. Vous pouvez récupérer ce jeton sur votre téléphone, l\'application Authenticator de Google.
') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('L\'authentification à deux facteurs est désormais activée. Scannez le code QR suivant à l\'aide de l\'application Authenticator de votre téléphone.
') }}
                    </p>
                </div>

                <div class="mt-4 dark:p-4 dark:w-56 dark:bg-black">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('Stockez ces codes de récupération dans un gestionnaire de mots de passe sécurisé. Ils peuvent être utilisés pour récupérer l\'accès à votre compte en cas de perte de votre appareil d\'authentification à deux facteurs.
') }}
                    </p>
                </div>²
                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('Activer') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Regenerate Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('Show Recovery Codes') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                    <x-jet-danger-button wire:loading.attr="disabled">
                        {{ __('Disable') }}
                    </x-jet-danger-button>
                </x-jet-confirms-password>
            @endif
        </div>
    </x-slot>
</x-jet-action-section>
