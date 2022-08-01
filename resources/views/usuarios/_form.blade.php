    @csrf
        <div class="card">
            <div class="card-body">
                <fieldset>
                    <legend>Dados do usuário</legend>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input
                                    value="{{ $user->name ?? ''}}"
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    id="name"
                                    required
                                    placeholder="Nome do usuário"/>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    value="{{ $user->email ?? '' }}"
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    id="email"
                                    required
                                    placeholder="Email do usuário"/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select value="{{ $user->role ?? 'manager' }}" class="form-control" id="role" name="role">
                                    <option>manager</option>
                                    <option>standart</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    id="password"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password_confirmation">Confirma Senha</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    id="password_confirmation">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
