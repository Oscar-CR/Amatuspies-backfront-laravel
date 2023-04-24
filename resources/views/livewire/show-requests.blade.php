<div>
    <h1 style="width: 128px; font-weight:bold; margin:0; width:100%;">Solicitudes recibidas</h1>
    <br>
    <div class="card  pb-4">
        <div class="table-responsive">
            <table class="table table-striped" id="table-directory">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Mas detalles</th>
                        <th scope="col" style="width: 10%;">Fecha de envio</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicalAppointment as $medical)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$medical->name}}</td>
                        <td>{{$medical->email}}</td>
                        <td>{{$medical->motive}}</td>
                        <td>{{$medical->more_details}}</td>
                        <td>{{$medical->created_at->format('d-m-Y')}}</td>
                        <td><a  wire:click="$emit('delete',{{$medical->id}})" type="button" class="btn btn-danger" style="background-color:#dc3545;">Eliminar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="con ms-4 me-4 mt-4">
                {{ $medicalAppointment->links() }}
            </div>
            
        </div>

   
    </div>
    <br><br>

</div>