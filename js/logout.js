let usuario = 'NINGUNO';
console.log(usuario);
sessionStorage.setItem('Usuarioconectado', JSON.stringify({user:usuario}));


var usuarios3 = [
    {   mail:     'berna',
        password: 'berna',
        usuario:  'Bernardo',
        nombre:   'Bernardo Nogues',
        direccion: 'sssss',
        telefono: '0123456 '
     },
     {  mail:   'luis',
        password: 'luis',
        usuario:  'Luishi',
        nombre: '',
        direccion: '',
        telefono: ' '
     }
    ];

sessionStorage.setItem('ListaUsuarios', JSON.stringify({usuarios3}));
