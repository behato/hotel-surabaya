<?php


function MoneyFilter($param){
	return number_format($param, 2);
}

function TitleShorter($param){
	return substr($param, 0,20);
}