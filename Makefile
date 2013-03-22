all: wld.js simp.js

wld.js: wld.coffee
	./coffee wld.coffee >wld.js
