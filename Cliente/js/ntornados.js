var ancho = 800;
var alto = 600;
var juego = new Phaser.Game(ancho, alto, Phaser.AUTO, 'ntornados', {preload: preload, create: create, update: update, render: render});


function preload () {

	juego.load.image('patata', 'imgs/img.png');
	juego.load.image('fondo', 'imgs/sky.png');

}

var texto = "";
var vel = 20;
var fondo;
var jugador;
var cursors;

function create () {
	
	juego.physics.startSystem(Phaser.Physics.ARCADE);

	cursors = juego.input.keyboard.createCursorKeys();
    
	fondo = juego.add.sprite(0, 0, 'fondo');
	
	jugador = juego.add.sprite(400, 300, 'patata');
	jugador.scale.setTo(0.06, 0.06);
	jugador.anchor.setTo(0.5, 0.5);
    
    juego.physics.enable(jugador, Phaser.Physics.ARCADE);

}

function avanzar () {
	
}

function update () {
	if (cursors.left.isDown) {
            // jugador.x -= vel;
            jugador.rotation -= 0.1;
    }
    if (cursors.right.isDown){
            // jugador.x += vel;
            jugador.rotation += 0.1;
    }
    if (cursors.up.isDown){
            jugador.y -= vel;
    }
    if (cursors.down.isDown){
            jugador.y += vel;
    }
    juego.camera.follow(jugador);

}


function render () {
	
}