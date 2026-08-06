-- Seed one sample project for initial testing
INSERT INTO research_areas (title, slug, summary, content, created_at, updated_at) VALUES ('GeoAI', 'geoai', 'GeoAI research domain', 'Content for GeoAI', NOW(), NOW());

INSERT INTO projects (title, slug, summary, objectives, technologies, research_area_id, status, created_at, updated_at) VALUES (
    'Urban Heat Island Mitigation Modeling',
    'urban-heat-island-mitigation',
    'Applying spatiotemporal deep learning to urban cooling strategies',
    'Model urban temperature dynamics; Identify vulnerable zones; Recommend interventions',
    'Remote sensing, GeoAI, ML',
    1,
    'ongoing',
    NOW(), NOW()
);
