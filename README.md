# Skrip Inti

```javascript
halaman_pertama = 'a'
bagian_komponen = '.komponen'

lokasi = () => {
	!location.hash ? location.href = `/#/${halaman_pertama}` : ''
	komponen = location.hash.split('#/')[1]
	$(bagian_komponen).load(`/${komponen}`)
}
lokasi()
$(window).on('hashchange', () => {
	lokasi()
})
```