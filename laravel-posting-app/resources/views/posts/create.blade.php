<!-- 投稿作成フォーム -->
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="content">内容</label>
        <textarea id="content" name="content">{{ old('content') }}</textarea>
        @error('content')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="image">画像</label>
        <input type="file" id="image" name="image">
        @error('image')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">投稿する</button>
</form>
