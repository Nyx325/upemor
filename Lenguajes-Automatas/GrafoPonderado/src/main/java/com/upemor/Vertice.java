package com.upemor;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

import lombok.Getter;
import lombok.Setter;

@Getter
@Setter
public class Vertice {
  private String nombre;
  private boolean visited;
  private List<Adyacencia> adyacencias;

  public Vertice(String nombre) {
    this.nombre = nombre;
    this.adyacencias = new ArrayList<>();
  }

  public void addAdyacencias(Adyacencia... adyacecnias) {
    Collections.addAll(this.adyacencias, adyacecnias);
  }

  public boolean isVisited() {
    return this.visited;
  }

  public void setVisited(boolean visited) {
    this.visited = visited;
  }

  @Override
  public String toString() {
    return "[" + nombre + "]";
  }
}
