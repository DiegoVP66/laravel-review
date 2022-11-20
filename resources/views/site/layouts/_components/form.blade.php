
<form action={{route('site.home')}} method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <button type="submit">send</button>
</form>