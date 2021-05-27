<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Create
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Create new post
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Title" />
                <x-jet-input type="text" class="w-full" wire:model="title" />
                <x-jet-input-error for="title" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Content" />
                <textarea rows="6" class="form-control w-full" wire:model="content">
                </textarea>
                <x-jet-input-error for="content" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancel
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save">
                Create
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>
