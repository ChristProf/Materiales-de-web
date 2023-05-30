function idioma(idioma) {
  fetch('traducciones.json')
  .then(response => response.json())
  .then(translations => {
    const elements = document.querySelectorAll('[data-translate]');
    elements.forEach(element => {
      const key = element.getAttribute('data-translate');
      const language = idioma; 
      const translation = translations[language][key];
      element.textContent = translation;
    });
  })
  .catch(error => {
    console.error('Error al cargar el archivo:', error);
  });
}

