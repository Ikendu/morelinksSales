function toggleChat() {
  const chatBox = document.getElementById('chatBox')
  chatBox.style.display = chatBox.style.display === 'flex' ? 'none' : 'flex'
}

function sendMessage() {
  const input = document.getElementById('chatInput')
  const messages = document.getElementById('chatMessages')

  if (input.value.trim() !== '') {
    const newMsg = document.createElement('p')
    newMsg.innerHTML = '<strong>You:</strong> ' + input.value
    messages.appendChild(newMsg)
    input.value = ''
    messages.scrollTop = messages.scrollHeight
  }
}
