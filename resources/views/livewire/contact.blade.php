<div>
	Contact
	<div>
		<label for="name">Nom</label>
		<input wire:model="name" id="name" type="text">
	</div>

	<div>
		<livewire:custom-input wire:model="firstname"></livewire:custom-input>
	</div>

	<button wire:click="save">Action</button>
</div>
