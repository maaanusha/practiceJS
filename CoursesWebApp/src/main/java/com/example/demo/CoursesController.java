package com.example.demo;

import javax.servlet.http.HttpSession;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.ResponseBody;

@Controller

public class CoursesController {
	@RequestMapping("course1")

	public String courses(String cname, HttpSession session)
	{
		
		//System.out.println("the course is "+cname);
		session.setAttribute("cname", cname);
		return "course1.jsp";
	}
}
