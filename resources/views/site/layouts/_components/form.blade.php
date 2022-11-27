<form action={{ route('site.home') }} method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="text" name="age" placeholder="Idade">
    <input type="text" name="email" placeholder="E-mail">
    <div>
        <textarea style="margin-top:30px;height:100px;width:530px;"  name="message" placeholder="Mensagem"></textarea>
    </div>
    <button type="submit">send</button>
</form>

<pre>
 {{ print_r($errors) }}
</pre>
