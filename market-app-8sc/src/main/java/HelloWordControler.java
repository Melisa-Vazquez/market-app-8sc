package com.itmerida.market_app_8sc;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class HelloWordControler {

    @GetMapping("/hola")
    public String saludar() {
        return "¡Hola mundo!";
    }
}
