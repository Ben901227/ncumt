function confirmDelete(id) {
    if (confirm('確定要刪除嗎？')) {
        Livewire.emit('delete', id);
    }
}
