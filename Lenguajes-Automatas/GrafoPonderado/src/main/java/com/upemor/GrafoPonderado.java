package com.upemor;

import java.util.Collections;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;
import java.util.Stack;

import lombok.Setter;
import lombok.Getter;

/**
 * GrafoPonderado
 */
@Getter
@Setter
public class GrafoPonderado {
    private String nombre;
    private List<Vertice> vertices;

    public GrafoPonderado(String nombre) {
        this.nombre = nombre;
        this.vertices = new LinkedList<>();
    }

    public void addVertices(Vertice... vertices) {
        Collections.addAll(this.vertices, vertices);
    }

    public void resetVisited(){
        for (Vertice vertice : vertices) {
            vertice.setVisited(false);
        }
    }

    public void mostrarListaAdyacencias() {
        System.out.println("Lista de adyacencia: ");
        for (Vertice v : vertices) {
            System.out.print(v + "(" + v.getAdyacencias().size() + "),{");
            for (Adyacencia adyacencia : v.getAdyacencias()) {
                System.out.print(adyacencia + ", ");
            }
            System.out.println("})");
        }
    }

    public void recorridoEnAnchura(Vertice inicio) {
        Queue<Vertice> queue = new LinkedList<>();
        inicio.setVisited(true);
        queue.add(inicio);
        System.out.print("Recorrido en anchura empezando por " + inicio + "{");

        Vertice actual;
        while (!queue.isEmpty()) {
            actual = queue.poll();// el poll quita de la cola
            System.out.print(" " + actual);

            for (Adyacencia adyacencia : actual.getAdyacencias()) {
                if (!adyacencia.getVertice().isVisited()) {
                    adyacencia.getVertice().setVisited(true);
                    queue.add(adyacencia.getVertice());
                }
            }
        }
        System.out.println(" }");
        this.resetVisited();
    }

    // Se usa Pila
    public void recorridoEnProfundidad(Vertice inicio) {
        Stack<Vertice> stack = new Stack<>();
        inicio.setVisited(true);
        stack.add(inicio);

        Vertice actual;
        System.out.print("Recorrido en profundidad empezando por " + inicio + "{");
        while (!stack.isEmpty()) {
            actual = stack.pop();
            System.out.print(" " + actual);

            for (Adyacencia adyacencia : actual.getAdyacencias()) {
                if (!adyacencia.getVertice().isVisited()) {
                    adyacencia.getVertice().setVisited(true);
                    stack.add(adyacencia.getVertice());
                }
            }
        }
        System.out.println(" }");
        this.resetVisited();
    }
}