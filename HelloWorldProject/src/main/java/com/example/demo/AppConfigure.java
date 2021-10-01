package com.example.demo;

import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class AppConfigure {
	@RequestMapping("/hello")
	public String hello() {
		return "hello world";
	}

}
