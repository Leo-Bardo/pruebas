
async function ejemploAsincrono() {
    console.log('Inicio de la función asíncrona');
    
    // Simular una tarea asíncrona con setTimeout
    await new Promise(resolve => {
        setTimeout(() => {
            console.log('Tarea asíncrona completada');
            resolve(); // Resolvemos la promesa después de 2 segundos
        }, 2000);
    });
    
    console.log('Fin de la función asíncrona');
}

// Llamar a la función asíncrona
console.log('Antes de llamar a la función asíncrona');
ejemploAsincrono();
console.log('Después de llamar a la función asíncrona');
