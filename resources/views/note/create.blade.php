<x-app-layout>
<div class="note-container single-note">
        <h1>Create new note</h1>
        <form action="{{ route('note.store') }}" method="post" class="note">
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note"></textarea>
            <div class="note-buttons">
                <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
                <button type="submit" class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
