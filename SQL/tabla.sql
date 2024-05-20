
create table visita(
    vis_codigo serial PRIMARY KEY,
    vis_nombres  varchar(50),
    vis_apellidos varchar(50),
    vis_procedencia varchar(100),
    vis_FechaIngreso date,
    vis_FechaSalida date,
    vis_motivo varchar(250)
);