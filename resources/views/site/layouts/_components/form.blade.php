<form action={{ route('site.home') }} method="post">
    @csrf
    <input type="text" value="{{ old('name') }}" name="name" placeholder="Nome">
    <input type="text" value="{{ old('age') }}" name="age" placeholder="Idade">
    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail">
    {{-- {{ print_r($options) }} --}}
    <select name="options">
        <option value="">Motivo do contato</option>

        @foreach ($options as $key => $option)
            <option value="{{ $option->id }}" {{ old('options') == $option->id ? 'selected' : '' }}>{{ $option->options }}
            </option>
        @endforeach

    </select>
    <div>
        <textarea style="margin-top:30px;" name="message" placeholder="Mensagem">{{ old('message') != '' ? old('message') : null }}</textarea>
    </div>
    <button type="submit">send</button>
</form>

{{--<pre>
 {{ print_r($errors) }}
</pre>--}}
