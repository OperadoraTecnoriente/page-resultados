const puppeteer = require('puppeteer');
const fs = require('fs');
const sharp = require('sharp');
const { exec } = require('child_process');
(async () => {
  const browser = await puppeteer.launch({ headless: false });
  const page = await browser.newPage();

  let animales = [
    "Delfin",
    "Carnero",
    "Toro",
    "Ciempies",
    "Alacran",
    "Leon",
    "Rana",
    "Perico",
    "Raton",
    "Aguila",
    "Tigre",
    "Gato",
    "Caballo",
    "Mono",
    "Paloma",
    "Zorro",
    "Oso",
    "Pavo",
    "Burro",
    "Chivo",
    "Cerdo",
    "Gallo",
    "Camello",
    "Cebra",
    "Iguana",
    "Gallina",
    "Vaca",
    "Perro",
    "Zamuro",
    "Elefante",
    "Caiman",
    "Lapa",
    "Ardilla",
    "Pez",
    "Venado",
    "Jirafa",
    "Culebra"
  ];


  for (let i = 0; i <= 36; i++) {
    // Formatear el número para que tenga dos dígitos (por ejemplo, 01 en lugar de 1)
    const formattedNumber = i.toString().padStart(2, '0');
    const imageUrl = `https://guacharoactivo.com/animals/guacharo/${formattedNumber}.png`;

    await page.goto(imageUrl);

    // Esperar a que la imagen esté completamente cargada
    await page.waitForSelector('img');

    // Obtener la URL de la imagen
    const imageSrc = await page.$eval('img', img => img.src);

    // Descargar la imagen
    const viewSource = await page.goto(imageSrc);
    const buffer = await viewSource.buffer();

    // Convertir la imagen a formato PNG
    const pngBuffer = await sharp(buffer).toFormat('png').toBuffer();

    // Guardar la imagen en formato PNG en la ruta especificada
    fs.writeFile(`./GuacharoActivo/${i}.png`, pngBuffer, function (err) {
      if (err) {
        return console.error(err);
      }
      // Comprimir la imagen PNG
      exec(`pngquant --ext .png --force  ./GuacharoActivo/${formattedNumber}.png`, (error, stdout, stderr) => {
        if (error) {
          console.error(`Error al comprimir la imagen: ${error.message}`);
          return;
        }
        if (stderr) {
          console.error(`Error al comprimir la imagen: ${stderr}`);
          return;
        }
        console.log(`La imagen r${i} ha sido convertida a formato PNG, comprimida y guardada con éxito.`);
      });
    });
  }

  await browser.close();
})();
