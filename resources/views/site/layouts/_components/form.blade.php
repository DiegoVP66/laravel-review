
<form action={{route('site.home')}} method="post">
    @csrf
    <input type="text" name="name" placeholder="name" required>
    <input type="text" name="age" placeholder="age" required>
    <button type="submit">send</button>
</form>