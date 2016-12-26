<?php


function MoneyFilter($param){
	return number_format($param, 2);
}