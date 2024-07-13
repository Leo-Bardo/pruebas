function saveNote() {
    const note = document.getElementById('note').value;
    const notes = JSON.parse(localStorage.getItem('notes') || '[]');
    notes.push(note);
    localStorage.setItem('notes', JSON.stringify(notes));
    alert('Nota guardada en localStorage!');
  }

  window.onload = () => {
    const notes = JSON.parse(localStorage.getItem('notes') || '[]');
    document.getElementById('note').value = notes.join('\n\n');
  };