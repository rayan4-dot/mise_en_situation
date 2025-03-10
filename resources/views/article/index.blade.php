<div>
    <label>Add Article</label>
    <form action="{{ route('article.store') }}" method="POST">
        @csrf
        <textarea name="content" id="content"></textarea>
        
        <label>Select Category</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        
        <button type="submit">Save</button>
    </form>
</div>
