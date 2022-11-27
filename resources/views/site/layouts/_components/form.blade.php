<form action={{ route('site.home') }} method="post">
    @csrf
    <input type="text" value="{{ old('name') }}" name="name" placeholder="Nome">
    <input type="text" value="{{ old('age') }}" name="age" placeholder="Idade">
    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail">
    <select name="options">
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
    </select>
    <div>
        <textarea style="margin-top:30px;" name="message" placeholder="Mensagem">{{ old('message') != '' ? old('message') : null }}</textarea>
    </div>
    <button type="submit">send</button>
</form>

<pre>
 {{ print_r($errors) }}
</pre>
