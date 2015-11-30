@extends("app")

@section("content")
<div class="container">
	<div class="row text-center" style=>
		<div class="col-md-12">
			<h2>ENCONTRE PROFISSIONAIS DE SAÚDE E AGENDE ONLINE</h2>
			<h3>Agende quando quiser e receba lembretes via SMS. É de graça!</h3>
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-md-4">

			<h3>Comece por aqui, é <strong>fácil</strong>!</h3>

			<form>
				<div class="form-group">
					<label for="areas_select">Selecione uma área</label>
					<select id="areas_select" class="form-control" name="areas">
						<option value="blank"></option>
						<option value="fisioterapia">Fisioterapia</option>
						<option value="fonoaudiologia">Fonoaudiologia</option>
						<option value="medicina">Medicina</option>
						<option value="nutricão">Nutricão</option>
						<option value="odontologia">Odontologia</option>
						<option value="outro">Outro</option>
					</select>
				</div>
				<div class="form-group">
					<label for="especialidades_select">Selecione uma especialidade</label>
					<select id="especialidades_select" class="form-control" name="especialidades">
						<option value="blank"></option>
						<option value="fisioterapia">Fisioterapia</option>
						<option value="osteopatia">Osteopatia</option>
						<option value="pilates">Pilates</option>
					</select>
				</div>

				<div class="form-group">
					<label for="planos_de_saude_select">Plano de saúde (opcional)</label>
					<select id="planos_de_saude_select" class="form-control" name="planos_de_saude">
						<option value="blank"></option>
						<option value="plano_1">Plano de saúde 1</option>
						<option value="plano_2">Plano de saúde 2</option>
						<option value="plano_3">Plano de saúde 3</option>
						<option value="plano_4">Plano de saúde 4</option>
						<option value="plano_5">Plano de saúde 5</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default pull-right">Submit</button>
			</form>
		</div>

		<div class="col-md-offset-2 col-md-6">
			<h3>O que você está procurando?</h3>

			<form>
					<label for="pesquisa_generica_input">Digite o nome de um profissional, uma clínica ou um sintoma</label>
				<div class="input-group">
					<input type="email" class="form-control input-lg" id="pesquisa_generica_input" name="pesquisa_generica"></input>
					<span class="input-group-btn">
						<button type="submit" class="btn btn-default btn-lg">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
						</button>
					</span>
			  	</div>
			</form>

		</div>
	</div>
</div>

@endsection("content")
