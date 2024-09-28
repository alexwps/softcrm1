<form action="{{ url('admin/novo') }}" method="POST">
    @csrf
    <label>Email:</label><br>
    <input name="email" type="text" /><br>
    <label>Senha:</label><br>
    <input name="senha" type="password" /><br>
    <input type="submit" value="Salvar" />
</form>

