<?php

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = ['ubicacion', 'fecha', 'ph', 'cloro', 'descripcion'];
}