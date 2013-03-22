#!/usr/bin/env ruby

require 'coffee-script'

puts CoffeeScript.compile(File.open(ARGV[0]).read)
