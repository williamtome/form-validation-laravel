@csrf
<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$client->name)}}">
</div>
<div class="form-group">
    <label for="document_number">Documento</label>
    <input type="text" name="document_number" id="document_number" class="form-control" value="{{old('document_number', $client->document_number)}}">
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" class="form-control" value="{{old('email',$client->email)}}">
</div>
<div class="form-group">
    <label for="phone">Telefone</label>
    <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone', $client->phone)}}">
</div>
@php
    $maritalStatus = $client->marital_status;
@endphp
<div class="form-group">
    <label for="marital_status">Estado Civil</label>
    <select name="marital_status" id="marital_status" class="form-control">
        <option value="">Selecione o estado civil</option>
        <option value="1" {{old('marital_status', $maritalStatus) == 1 ? 'selected' : null}}>Solteiro</option>
        <option value="2" {{old('marital_status', $maritalStatus) == 2 ? 'selected' : null}}>Casado</option>
        <option value="3" {{old('marital_status', $maritalStatus) == 3 ? 'selected' : null}}>Divorciado</option>
    </select>
</div>
<div class="form-group">
    <label for="date_birth">Data de Nasc.</label>
    <input type="date" name="date_birth" id="date_birth" class="form-control"  value="{{old('date_birth', $client->date_birth)}}">
</div>
<div class="radio">
    <label>
        <input type="radio" name="sex" id="sex" value="M" {{ old('sex', $client->sex) == 'M' ? 'checked' : null }}> Masculino
    </label>
</div>
<div class="radio">
    <label>
        <input type="radio" name="sex" id="sex" value="F" {{ old('sex', $client->sex) == 'F' ? 'checked' : null }}> Feminino
    </label>
</div>
<div class="form-group">
    <label for="physical_disability">Deficiência Física</label>
    <input type="text" name="physical_disability" id="physical_disability" class="form-control" value="{{ old('physical_disability', $client->physical_disability)}}">
</div>
<div class="checkbox">
    <label>
        <input type="checkbox" name="defaulter" id="defaulter" {{ old('defaulter',$client->defaulter) ? 'checked' : null }}> Inadimplente?
    </label>
</div>
