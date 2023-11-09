<div class="border mx-2 my-2 px-4 py-4">
    <p class="my-2 underline"><em>category_view.blade.php</em></p>
    <p class="font-italic mb-2">THIS IS THE CUSTOM VIEW THAT IS RENDERING THE LIVEWIRE COMPONENT FROM POST RESOURCE</p>

    <code>
        ViewField::make('category_view') <br>
        ->view('category_view') <br>
        ->columnSpanFull()
    </code>

@livewire('list-categories')
</div>
