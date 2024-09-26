<x-app-layout>
    <div class="note-container single-note">
        <h1>Edit note</h1>
        <form action="{{ route('note.update', $note) }}" method="post" class="note">
            @csrf
            @method('put')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note">{{ $note->note }}</textarea>
            <div class="note-buttons">
                <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
                <button type="submit" class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
