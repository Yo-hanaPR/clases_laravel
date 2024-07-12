// consultas para tinker

Importar modelo para usar sus propiedades y acceder a los datos de Base de datos:   use App\ Model\NombreModelo

Retornar todos los registros de la tabla: NombreModelo::all()

Retornar la PRIMERA INSTANCIA del modelo que cumpla cierta condicion: NombreModelo::where('id',x)->first()

Retornar la COLECCION de instancias del modelo que cumpla ciertas condiciones: NombreModelo::where('status','active')->get()

Acceder a una relacion de un modelo: NombreModelo::first()->propiedadDinamicaModelo.

contar la cantidad de instancias del modelo (registros de la tabla): count(NombreModelo::all())

Retornar una propiedad del modelo, por ejemplo el nombre del autor: NombreModelo::first()->nombre
