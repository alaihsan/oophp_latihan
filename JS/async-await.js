function helloWorld() {
    return new Promise(resolve => {
        setTimeout((
            resolve('Hello World...!');
        );
    }, 2000);
    });
}

async function msg() {
    const msg = await helloWorld();
    console.log('Pesan ini muncul 2 detik lagi', msg);
}

msg();