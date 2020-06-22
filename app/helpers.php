<?php

function setactive($routename)
{
	return request()->routeIs($routename) ? 'active' : '';
}