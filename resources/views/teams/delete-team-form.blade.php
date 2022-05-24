<x-jet-action-section>
    <x-slot name="title">
        {{ __('Borrar Curso') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Se Borrara este curso') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Una vez que elimines este curso se eliminaran con el todos los miembros.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Eliminar Curso') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingTeamDeletion">
            <x-slot name="title">
                {{ __('Eliminar curso') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Estas seguro de eliminar este curso?') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Eliminar') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </x-slot>
</x-jet-action-section>
