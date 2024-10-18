package com.goo;

import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import org.springframework.test.web.reactive.server.WebTestClient;

class GreetingControllerTest {

    private WebTestClient testClient;

    @BeforeAll
    void setUp() throws Exception {
        this.testClient = WebTestClient.bindToRouterFunction(new GreetingHandler().routes())
            .build();
    }

    @Test
    void greeting() throws Exception {
        this.testClient.get().uri("/greeting") //
            .exchange() //
            .expectStatus().isOk() //
            .expectBody(String.class).isEqualTo("{\"id\":1,\"content\":\"Hello, World!\"}");
    }
}