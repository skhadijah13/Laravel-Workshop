<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf 
    Title     :
    <input type ="text" name="title">
    <br>
    <p>

    Content:
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <p>

    Image:
    <input type ="file" name="image">
    <p>
    <button type="submit">Save</button>
</form>