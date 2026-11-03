// Hafta 11 · Örnek fetch ile veri çekmek
async function havaGetir() {
  const url = 'https://api.open-meteo.com/v1/forecast'
    + '?latitude=40.19&longitude=29.06'
    + '&current=temperature_2m';
  const yanit = await fetch(url);
  const veri = await yanit.json();
  return veri.current.temperature_2m;
}

havaGetir().then(s =>
  console.log('Bursa: ' + s + ' °C'));
